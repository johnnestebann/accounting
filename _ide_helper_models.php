<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Auth{
/**
 * App\Models\Auth\Permission
 *
 * @property int $id
 * @property string $name
 * @property string $display_name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $title
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Auth\Role[] $roles
 * @method static \Illuminate\Database\Eloquent\Builder|Permission action($action = 'read')
 * @method static \Illuminate\Database\Eloquent\Builder|Permission collect($sort = 'display_name')
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission usingSearchString($string)
 */
	class Permission extends \Eloquent {}
}

namespace App\Models\Auth{
/**
 * App\Models\Auth\Role
 *
 * @property int $id
 * @property string $name
 * @property string $display_name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Auth\Permission[] $permissions
 * @method static \Illuminate\Database\Eloquent\Builder|Role collect($sort = 'display_name')
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Role usingSearchString($string)
 */
	class Role extends \Eloquent {}
}

namespace App\Models\Auth{
/**
 * App\Models\Auth\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $last_logged_in_at
 * @property string $locale
 * @property string|null $landing_page
 * @property bool $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Common\Company[] $companies
 * @property-read \App\Models\Common\Contact|null $contact
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Dashboard[] $dashboards
 * @property-read mixed $last_logged
 * @property-read mixed $picture
 * @property-read \Illuminate\Database\Eloquent\Collection|\Plank\Mediable\Media[] $media
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Auth\Permission[] $permissions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Auth\Role[] $roles
 * @method static \Plank\Mediable\MediableCollection|static[] all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|User collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|User enabled()
 * @method static \Plank\Mediable\MediableCollection|static[] get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User orWherePermissionIs($permission = '')
 * @method static \Illuminate\Database\Eloquent\Builder|User orWhereRoleIs($role = '', $team = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereHasMedia($tags, $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereHasMediaMatchAll($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermissionIs($permission = '', $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleIs($role = '', $team = null, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|User withMedia($tags = [], $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User withMediaMatchAll($tags = [])
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App\Models\Banking{
/**
 * App\Models\Banking\Account
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string $number
 * @property string $currency_code
 * @property float $opening_balance
 * @property string|null $bank_name
 * @property string|null $bank_phone
 * @property string|null $bank_address
 * @property bool $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Setting\Currency $currency
 * @property-read string $balance
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Banking\Transaction[] $transactions
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Account name($name)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account number($number)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class Account extends \Eloquent {}
}

namespace App\Models\Banking{
/**
 * App\Models\Banking\Reconciliation
 *
 * @property int $id
 * @property int $company_id
 * @property int $account_id
 * @property \Illuminate\Support\Carbon $started_at
 * @property \Illuminate\Support\Carbon $ended_at
 * @property float $closing_balance
 * @property int $reconciled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Banking\Account $account
 * @property-read \App\Models\Common\Company $company
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class Reconciliation extends \Eloquent {}
}

namespace App\Models\Banking{
/**
 * App\Models\Banking\Transaction
 *
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property \Illuminate\Support\Carbon $paid_at
 * @property float $amount
 * @property string $currency_code
 * @property float $currency_rate
 * @property int $account_id
 * @property int|null $document_id
 * @property int|null $contact_id
 * @property int $category_id
 * @property string|null $description
 * @property string $payment_method
 * @property string|null $reference
 * @property int $parent_id
 * @property int $reconciled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Banking\Account $account
 * @property-read \App\Models\Purchase\Bill|null $bill
 * @property-read \App\Models\Setting\Category $category
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Common\Contact|null $contact
 * @property-read \App\Models\Setting\Currency $currency
 * @property-read float $amount_for_account
 * @property-read string $attachment
 * @property-read string $route_id
 * @property-read string $route_name
 * @property-read string $type_title
 * @property-read \App\Models\Sale\Invoice|null $invoice
 * @property-read \Illuminate\Database\Eloquent\Collection|\Plank\Mediable\Media[] $media
 * @property-read \App\Models\Common\Recurring|null $recurring
 * @property-read \App\Models\Auth\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Plank\Mediable\MediableCollection|static[] all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction document($document_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction expense()
 * @method static \Plank\Mediable\MediableCollection|static[] get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction income()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction isDocument()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction isNotDocument()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction isNotReconciled()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction isNotTransfer()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction isReconciled()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction isTransfer()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction latest()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction paid()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction type($types)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereHasMedia($tags, $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereHasMediaMatchAll($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction withMedia($tags = [], $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction withMediaMatchAll($tags = [])
 */
	class Transaction extends \Eloquent {}
}

namespace App\Models\Banking{
/**
 * App\Models\Banking\Transfer
 *
 * @property int $id
 * @property int $company_id
 * @property int $expense_transaction_id
 * @property int $income_transaction_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Banking\Account $expense_account
 * @property-read \App\Models\Banking\Transaction $expense_transaction
 * @property-read \App\Models\Banking\Account $income_account
 * @property-read \App\Models\Banking\Transaction $income_transaction
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class Transfer extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Company
 *
 * @property int $id
 * @property string|null $domain
 * @property bool $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Banking\Account[] $accounts
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Purchase\BillHistory[] $bill_histories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Purchase\BillItemTax[] $bill_item_taxes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Purchase\BillItem[] $bill_items
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Purchase\BillTotal[] $bill_totals
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Purchase\Bill[] $bills
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Setting\Category[] $categories
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Common\Contact[] $contacts
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Setting\Currency[] $currencies
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Dashboard[] $dashboards
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\EmailTemplate[] $email_templates
 * @property-read string $company_logo
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sale\InvoiceHistory[] $invoice_histories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sale\InvoiceItemTax[] $invoice_item_taxes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sale\InvoiceItem[] $invoice_items
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sale\InvoiceTotal[] $invoice_totals
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Sale\Invoice[] $invoices
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Common\Item[] $items
 * @property-read \Illuminate\Database\Eloquent\Collection|\Plank\Mediable\Media[] $media
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module\ModuleHistory[] $module_histories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module\Module[] $modules
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Banking\Reconciliation[] $reconciliations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Recurring[] $recurring
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Report[] $reports
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Setting\Setting[] $settings
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Setting\Tax[] $taxes
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Banking\Transaction[] $transactions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Banking\Transfer[] $transfers
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Auth\User[] $users
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Widget[] $widgets
 * @method static \Plank\Mediable\MediableCollection|static[] all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Company autocomplete($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|Company collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Company enabled($value = 1)
 * @method static \Plank\Mediable\MediableCollection|static[] get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Query\Builder|Company onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Company usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereHasMedia($tags, $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereHasMediaMatchAll($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Company withMedia($tags = [], $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Company withMediaMatchAll($tags = [])
 * @method static \Illuminate\Database\Query\Builder|Company withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Company withoutTrashed()
 */
	class Company extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Contact
 *
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property string $name
 * @property string|null $email
 * @property int|null $user_id
 * @property string|null $tax_number
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $website
 * @property string $currency_code
 * @property bool $enabled
 * @property string|null $reference
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Purchase\Bill[] $bills
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Setting\Currency $currency
 * @property-read string $logo
 * @property-read mixed $unpaid
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Sale\Invoice[] $invoices
 * @property-read \Illuminate\Database\Eloquent\Collection|\Plank\Mediable\Media[] $media
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Banking\Transaction[] $transactions
 * @property-read \App\Models\Auth\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Plank\Mediable\MediableCollection|static[] all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact customer()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact email($email)
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Plank\Mediable\MediableCollection|static[] get($columns = ['*'])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact type($types)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact vendor()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereHasMedia($tags, $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereHasMediaMatchAll($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact withMedia($tags = [], $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact withMediaMatchAll($tags = [])
 */
	class Contact extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Dashboard
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property bool $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Auth\User[] $users
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Widget[] $widgets
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class Dashboard extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\EmailTemplate
 *
 * @property int $id
 * @property int $company_id
 * @property string $alias
 * @property string $class
 * @property string $name
 * @property string $subject
 * @property string $body
 * @property string|null $params
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate alias($alias)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class EmailTemplate extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Item
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string|null $sku
 * @property string|null $description
 * @property float $sale_price
 * @property float $purchase_price
 * @property int $quantity
 * @property int|null $category_id
 * @property int|null $tax_id
 * @property bool $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Purchase\BillItem[] $bill_items
 * @property-read \App\Models\Setting\Category|null $category
 * @property-read \App\Models\Common\Company $company
 * @property-read string $item_id
 * @property-read string $picture
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sale\InvoiceItem[] $invoice_items
 * @property-read \Illuminate\Database\Eloquent\Collection|\Plank\Mediable\Media[] $media
 * @property-read \App\Models\Setting\Tax|null $tax
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Plank\Mediable\MediableCollection|static[] all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Item autocomplete($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Plank\Mediable\MediableCollection|static[] get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Item name($name)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereHasMedia($tags, $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereHasMediaMatchAll($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Item withMedia($tags = [], $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Item withMediaMatchAll($tags = [])
 */
	class Item extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Media
 *
 * @property int $id
 * @property string $disk
 * @property string $directory
 * @property string $filename
 * @property string $extension
 * @property string $mime_type
 * @property string $aggregate_type
 * @property int $size
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read string $basename
 * @method static \Illuminate\Database\Eloquent\Builder|Media forPathOnDisk($disk, $path)
 * @method static \Illuminate\Database\Eloquent\Builder|Media inDirectory($disk, $directory, $recursive = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Media inOrUnderDirectory($disk, $directory)
 * @method static \Illuminate\Database\Eloquent\Builder|Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media newQuery()
 * @method static \Illuminate\Database\Query\Builder|Media onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Media query()
 * @method static \Illuminate\Database\Eloquent\Builder|Media unordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereBasename($basename)
 * @method static \Illuminate\Database\Query\Builder|Media withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Media withoutTrashed()
 */
	class Media extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Recurring
 *
 * @property int $id
 * @property int $company_id
 * @property string $recurable_type
 * @property int $recurable_id
 * @property string $frequency
 * @property int $interval
 * @property string $started_at
 * @property int $count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $recurable
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class Recurring extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Report
 *
 * @property int $id
 * @property int $company_id
 * @property string $class
 * @property string $name
 * @property string $description
 * @property object|null $settings
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class Report extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Widget
 *
 * @property int $id
 * @property int $company_id
 * @property int $dashboard_id
 * @property string $class
 * @property string $name
 * @property int $sort
 * @property object|null $settings
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Common\Dashboard $dashboard
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Auth\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class Widget extends \Eloquent {}
}

namespace App\Models\Module{
/**
 * App\Models\Module\Module
 *
 * @property int $id
 * @property int $company_id
 * @property string $alias
 * @property bool $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Module alias($alias)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class Module extends \Eloquent {}
}

namespace App\Models\Module{
/**
 * App\Models\Module\ModuleHistory
 *
 * @property int $id
 * @property int $company_id
 * @property int $module_id
 * @property string $version
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class ModuleHistory extends \Eloquent {}
}

namespace App\Models\Purchase{
/**
 * App\Models\Purchase\Bill
 *
 * @property int $id
 * @property int $company_id
 * @property string $bill_number
 * @property string|null $order_number
 * @property string $status
 * @property \Illuminate\Support\Carbon $billed_at
 * @property \Illuminate\Support\Carbon $due_at
 * @property float $amount
 * @property string $currency_code
 * @property float $currency_rate
 * @property int $category_id
 * @property int $contact_id
 * @property string $contact_name
 * @property string|null $contact_email
 * @property string|null $contact_tax_number
 * @property string|null $contact_phone
 * @property string|null $contact_address
 * @property string|null $notes
 * @property int $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Setting\Category $category
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Common\Contact $contact
 * @property-read \App\Models\Setting\Currency $currency
 * @property-read string $amount_without_tax
 * @property-read string $attachment
 * @property-read string $discount
 * @property-read string $paid
 * @property-read mixed $received_at
 * @property-read string $status_label
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Purchase\BillHistory[] $histories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Purchase\BillItemTax[] $item_taxes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Purchase\BillItem[] $items
 * @property-read \Illuminate\Database\Eloquent\Collection|\Plank\Mediable\Media[] $media
 * @property-read \App\Models\Common\Recurring|null $recurring
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Purchase\BillTotal[] $totals
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Banking\Transaction[] $transactions
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel accrued()
 * @method static \Plank\Mediable\MediableCollection|static[] all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel due($date)
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Plank\Mediable\MediableCollection|static[] get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Bill latest()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel notPaid()
 * @method static \Illuminate\Database\Eloquent\Builder|Bill number($number)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel paid()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel whereHasMedia($tags, $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel whereHasMediaMatchAll($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel withMedia($tags = [], $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel withMediaMatchAll($tags = [])
 */
	class Bill extends \Eloquent {}
}

namespace App\Models\Purchase{
/**
 * App\Models\Purchase\BillHistory
 *
 * @property int $id
 * @property int $company_id
 * @property int $bill_id
 * @property string $status
 * @property int $notify
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Purchase\Bill $bill
 * @property-read \App\Models\Common\Company $company
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class BillHistory extends \Eloquent {}
}

namespace App\Models\Purchase{
/**
 * App\Models\Purchase\BillItem
 *
 * @property int $id
 * @property int $company_id
 * @property int $bill_id
 * @property int|null $item_id
 * @property string $name
 * @property string|null $sku
 * @property float $quantity
 * @property float $price
 * @property float $total
 * @property float $tax
 * @property string $discount_rate
 * @property string $discount_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Purchase\Bill $bill
 * @property-read \App\Models\Common\Company $company
 * @property-read string $discount
 * @property-read \App\Models\Common\Item|null $item
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Purchase\BillItemTax[] $taxes
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class BillItem extends \Eloquent {}
}

namespace App\Models\Purchase{
/**
 * App\Models\Purchase\BillItemTax
 *
 * @property int $id
 * @property int $company_id
 * @property int $bill_id
 * @property int $bill_item_id
 * @property int $tax_id
 * @property string $name
 * @property float $amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Purchase\Bill $bill
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Setting\Tax $tax
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class BillItemTax extends \Eloquent {}
}

namespace App\Models\Purchase{
/**
 * App\Models\Purchase\BillTotal
 *
 * @property int $id
 * @property int $company_id
 * @property int $bill_id
 * @property string|null $code
 * @property string $name
 * @property float $amount
 * @property int $sort_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Purchase\Bill $bill
 * @property-read \App\Models\Common\Company $company
 * @property-read string $title
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|BillTotal monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class BillTotal extends \Eloquent {}
}

namespace App\Models\Sale{
/**
 * App\Models\Sale\Invoice
 *
 * @property int $id
 * @property int $company_id
 * @property string $invoice_number
 * @property string|null $order_number
 * @property string $status
 * @property \Illuminate\Support\Carbon $invoiced_at
 * @property \Illuminate\Support\Carbon $due_at
 * @property float $amount
 * @property string $currency_code
 * @property float $currency_rate
 * @property int $category_id
 * @property int $contact_id
 * @property string $contact_name
 * @property string|null $contact_email
 * @property string|null $contact_tax_number
 * @property string|null $contact_phone
 * @property string|null $contact_address
 * @property string|null $notes
 * @property string|null $footer
 * @property int $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Setting\Category $category
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Common\Contact $contact
 * @property-read \App\Models\Setting\Currency $currency
 * @property-read string $amount_without_tax
 * @property-read string $attachment
 * @property-read string $discount
 * @property-read string $paid
 * @property-read mixed $sent_at
 * @property-read string $status_label
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sale\InvoiceHistory[] $histories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sale\InvoiceItemTax[] $item_taxes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sale\InvoiceItem[] $items
 * @property-read \Illuminate\Database\Eloquent\Collection|\Plank\Mediable\Media[] $media
 * @property-read \App\Models\Common\Recurring|null $recurring
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sale\InvoiceTotal[] $totals
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Banking\Transaction[] $transactions
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel accrued()
 * @method static \Plank\Mediable\MediableCollection|static[] all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel due($date)
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Plank\Mediable\MediableCollection|static[] get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice latest()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel notPaid()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice number($number)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel paid()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel whereHasMedia($tags, $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel whereHasMediaMatchAll($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel withMedia($tags = [], $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentModel withMediaMatchAll($tags = [])
 */
	class Invoice extends \Eloquent {}
}

namespace App\Models\Sale{
/**
 * App\Models\Sale\InvoiceHistory
 *
 * @property int $id
 * @property int $company_id
 * @property int $invoice_id
 * @property string $status
 * @property int $notify
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Sale\Invoice $invoice
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class InvoiceHistory extends \Eloquent {}
}

namespace App\Models\Sale{
/**
 * App\Models\Sale\InvoiceItem
 *
 * @property int $id
 * @property int $company_id
 * @property int $invoice_id
 * @property int|null $item_id
 * @property string $name
 * @property string|null $sku
 * @property float $quantity
 * @property float $price
 * @property float $total
 * @property float $tax
 * @property string $discount_rate
 * @property string $discount_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read string $discount
 * @property-read \App\Models\Sale\Invoice $invoice
 * @property-read \App\Models\Common\Item|null $item
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sale\InvoiceItemTax[] $taxes
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class InvoiceItem extends \Eloquent {}
}

namespace App\Models\Sale{
/**
 * App\Models\Sale\InvoiceItemTax
 *
 * @property int $id
 * @property int $company_id
 * @property int $invoice_id
 * @property int $invoice_item_id
 * @property int $tax_id
 * @property string $name
 * @property float $amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Sale\Invoice $invoice
 * @property-read \App\Models\Setting\Tax $tax
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class InvoiceItemTax extends \Eloquent {}
}

namespace App\Models\Sale{
/**
 * App\Models\Sale\InvoiceTotal
 *
 * @property int $id
 * @property int $company_id
 * @property int $invoice_id
 * @property string|null $code
 * @property string $name
 * @property float $amount
 * @property int $sort_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read string $title
 * @property-read \App\Models\Sale\Invoice $invoice
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceTotal monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class InvoiceTotal extends \Eloquent {}
}

namespace App\Models\Setting{
/**
 * App\Models\Setting\Category
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string $type
 * @property string $color
 * @property bool $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Purchase\Bill[] $bills
 * @property-read \App\Models\Common\Company $company
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Sale\Invoice[] $invoices
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Common\Item[] $items
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Banking\Transaction[] $transactions
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Category expense()
 * @method static \Illuminate\Database\Eloquent\Builder|Category income()
 * @method static \Illuminate\Database\Eloquent\Builder|Category item()
 * @method static \Illuminate\Database\Eloquent\Builder|Category name($name)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category other()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Category transfer()
 * @method static \Illuminate\Database\Eloquent\Builder|Category type($types)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class Category extends \Eloquent {}
}

namespace App\Models\Setting{
/**
 * App\Models\Setting\Currency
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string $code
 * @property float $rate
 * @property string $precision
 * @property string $symbol
 * @property string $symbol_first
 * @property string $decimal_mark
 * @property string $thousands_separator
 * @property bool $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Banking\Account[] $accounts
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Purchase\Bill[] $bills
 * @property-read \App\Models\Common\Company $company
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Common\Contact[] $contacts
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Sale\Invoice[] $invoices
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Banking\Transaction[] $transactions
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency code($code)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 */
	class Currency extends \Eloquent {}
}

namespace App\Models\Setting{
/**
 * App\Models\Setting\Setting
 *
 * @property int $id
 * @property int $company_id
 * @property string $key
 * @property string|null $value
 * @property-read \App\Models\Common\Company $company
 * @method static \Illuminate\Database\Eloquent\Builder|Setting companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting prefix($prefix = 'company')
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 */
	class Setting extends \Eloquent {}
}

namespace App\Models\Setting{
/**
 * App\Models\Setting\Tax
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property float $rate
 * @property string $type
 * @property bool $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Purchase\BillItemTax[] $bill_items
 * @property-read \App\Models\Common\Company $company
 * @property-read string $title
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sale\InvoiceItemTax[] $invoice_items
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Common\Item[] $items
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax compound()
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax fixed()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax inclusive()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax name($name)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax normal()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax notRate($rate)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax notWithholding()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax rate($rate)
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax type($types)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds($seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax withholding()
 */
	class Tax extends \Eloquent {}
}

