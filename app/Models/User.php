<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\User
 *
 * @property int $id
 * @property int|null $confirmed
 * @property string|null $mail_code
 * @property string|null $reg_date
 * @property string|null $login
 * @property string|null $pass
 * @property string|null $pass2
 * @property int|null $is_admin
 * @property int|null $type
 * @property string|null $ref
 * @property float|null $balance
 * @property string|null $wb_key
 * @property string|null $wb_dt
 * @property string|null $skype
 * @property string|null $phone
 * @property string|null $predmet
 * @property string|null $about
 * @property int|null $stavka
 * @property int|null $prc
 * @property string|null $dp_list
 * @property string|null $add_sum
 * @property string|null $yakassa
 * @property string|null $promocode
 * @property string|null $ip
 * @property string|null $last_dt
 * @property string|null $last_url
 * @property string|null $referal
 * @property string|null $reg_referal
 * @property int $blocked
 * @property int|null $projects
 * @property int|null $queries
 * @property int|null $unic_queries
 * @property int|null $projects_ozon
 * @property int|null $queries_ozon
 * @property int|null $unic_queries_ozon
 * @property string|null $parse_dt
 * @property int|null $parse_count
 * @property string|null $bot_code
 * @property int|null $bot_chatid
 * @property string|null $bot_username
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddSum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBlocked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBotChatid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBotCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBotUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereConfirmed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDpList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMailCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereParseCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereParseDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePass2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePredmet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProjects($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProjectsOzon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePromocode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereQueries($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereQueriesOzon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRef($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereReferal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRegDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRegReferal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSkype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStavka($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUnicQueries($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUnicQueriesOzon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWbDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWbKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereYakassa($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'confirmed',
        'mail_code',
        'reg_date',
        'login',
        'pass',
        'pass2',
        'is_admin',
        'type',
        'ref',
        'balance',
        'wb_key',
        'wb_dt',
        'skype',
        'phone',
        'predmet',
        'about',
        'stavka',
        'prc',
        'dp_list',
        'add_sum',
        'yakassa',
        'promocode',
        'ip',
        'last_dt',
        'last_url',
        'referal',
        'reg_referal',
        'blocked',
        'projects',
        'queries',
        'unic_queries',
        'projects_ozon',
        'queries_ozon',
        'unic_queries_ozon',
        'parse_dt',
        'parse_count',
        'bot_code',
        'bot_chatid',
        'bot_username',
    ];


    /*id	int Автоматическое приращение
confirmed	tinyint NULL [0]
mail_code	varchar(30) NULL
reg_date	datetime NULL
login	varchar(255) NULL
pass	varchar(255) NULL
pass2	varchar(255) NULL
is_admin	int NULL
type	tinyint NULL
ref	varchar(255) NULL
balance	float NULL
wb_key	varchar(255) NULL
wb_dt	datetime NULL
skype	varchar(255) NULL
phone	varchar(255) NULL
predmet	text NULL
about	varchar(255) NULL
stavka	int NULL [0]
prc	int NULL [0]
dp_list	text NULL
add_sum	varchar(255) NULL [0]
yakassa	varchar(255) NULL
promocode	varchar(255) NULL
ip	varchar(50) NULL
last_dt	datetime NULL
last_url	varchar(255) NULL
referal	varchar(50) NULL
reg_referal	varchar(50) NULL
blocked	int [0]
projects	int NULL
queries	int NULL
unic_queries	int NULL
projects_ozon	int NULL
queries_ozon	int NULL
unic_queries_ozon	int NULL
parse_dt	date NULL
parse_count	int NULL
bot_code	varchar(50) NULL
bot_chatid	int NULL
bot_username	varchar(100) NULL*/


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'pass',
        'pass2',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'reg_date' => 'datetime',
    ];
}
