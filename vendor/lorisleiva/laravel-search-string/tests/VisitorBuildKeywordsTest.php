<?php

namespace Lorisleiva\LaravelSearchString\Tests;

use Lorisleiva\LaravelSearchString\Exceptions\InvalidSearchStringException;
use Lorisleiva\LaravelSearchString\Tests\Concerns\GeneratesEloquentBuilder;
use Lorisleiva\LaravelSearchString\Visitors\AttachRulesVisitor;
use Lorisleiva\LaravelSearchString\Visitors\BuildKeywordsVisitor;
use Lorisleiva\LaravelSearchString\Visitors\InlineDumpVisitor;
use Lorisleiva\LaravelSearchString\Visitors\RemoveNotSymbolVisitor;

class VisitorBuildKeywordsTest extends VisitorTest
{
    public function visitors($manager, $builder, $model)
    {
        return [
            new RemoveNotSymbolVisitor(),
            new AttachRulesVisitor($manager),
            new BuildKeywordsVisitor($manager, $builder),
            new InlineDumpVisitor()
        ];
    }

    /*
     * Select
     */

    /** @test */
    public function it_sets_the_columns_of_the_builder()
    {
        $builder = $this->getBuilder('fields:name');
        $this->assertEquals(['name'], $builder->getQuery()->columns);
    }

    /** @test */
    public function it_excludes_columns_when_operator_is_negative()
    {
        $builder = $this->getBuilder('not fields:name');

        $this->assertEquals(
            ['price', 'description', 'paid', 'boolean_variable', 'created_at'],
            $builder->getQuery()->columns
        );
    }

    /** @test */
    public function it_can_set_and_exclude_multiple_columns()
    {
        $builder = $this->getBuilder('fields:name,price,description');
        $this->assertEquals(['name', 'price', 'description'], $builder->getQuery()->columns);

        $builder = $this->getBuilder('not fields:name,price,description');
        $this->assertEquals(['paid', 'boolean_variable', 'created_at'], $builder->getQuery()->columns);
    }

    /** @test */
    public function it_uses_only_the_last_select_that_matches()
    {
        $builder = $this->getBuilder('fields:name fields:price fields:description');
        $this->assertEquals(['description'], $builder->getQuery()->columns);
    }

    /*
     * OrderBy
     */

    /** @test */
    public function it_sets_the_order_by_of_the_builder()
    {
        $builder = $this->getBuilder('sort:name');

        $this->assertEquals([
            [ 'column' => 'name', 'direction' => 'asc' ],
        ], $builder->getQuery()->orders);
    }

    /** @test */
    public function it_sets_the_descending_order_when_preceded_by_a_minus()
    {
        $builder = $this->getBuilder('sort:-name');

        $this->assertEquals([
            [ 'column' => 'name', 'direction' => 'desc' ],
        ], $builder->getQuery()->orders);
    }

    /** @test */
    public function it_can_set_multiple_order_by()
    {
        $builder = $this->getBuilder('sort:name,-price,created_at');

        $this->assertEquals([
            [ 'column' => 'name', 'direction' => 'asc' ],
            [ 'column' => 'price', 'direction' => 'desc' ],
            [ 'column' => 'created_at', 'direction' => 'asc' ],
        ], $builder->getQuery()->orders);
    }

    /** @test */
    public function it_uses_only_the_last_order_by_that_matches()
    {
        $builder = $this->getBuilder('sort:name sort:-price sort:created_at');

        $this->assertEquals([
            [ 'column' => 'created_at', 'direction' => 'asc' ],
        ], $builder->getQuery()->orders);
    }

    /*
     * Limit
     */

    /** @test */
    public function it_sets_the_limit_of_the_builder()
    {
        $builder = $this->getBuilder('limit:10');
        $this->assertEquals(10, $builder->getQuery()->limit);
    }

    /** @test */
    public function it_throws_an_exception_if_the_limit_is_not_an_integer()
    {
        $this->expectException(InvalidSearchStringException::class);
        $this->getBuilder('limit:foobar');
    }

    /** @test */
    public function it_throws_an_exception_if_the_limit_is_an_array()
    {
        $this->expectException(InvalidSearchStringException::class);
        $this->getBuilder('limit:10,foo,23');
    }

    /** @test */
    public function it_uses_only_the_last_limit_that_matches()
    {
        $builder = $this->getBuilder('limit:10 limit:20 limit:30');
        $this->assertEquals(30, $builder->getQuery()->limit);
    }

    /*
     * Offset
     */

    /** @test */
    public function it_sets_the_offset_of_the_builder()
    {
        $builder = $this->getBuilder('from:10');
        $this->assertEquals(10, $builder->getQuery()->offset);
    }

    /** @test */
    public function it_throws_an_exception_if_the_offset_is_not_an_integer()
    {
        $this->expectException(InvalidSearchStringException::class);
        $this->getBuilder('from:foobar');
    }

    /** @test */
    public function it_throws_an_exception_if_the_offset_is_an_array()
    {
        $this->expectException(InvalidSearchStringException::class);
        $this->getBuilder('from:10,foo,23');
    }

    /** @test */
    public function it_uses_only_the_last_offset_that_matches()
    {
        $builder = $this->getBuilder('from:10 from:20 from:30');
        $this->assertEquals(30, $builder->getQuery()->offset);
    }
}
