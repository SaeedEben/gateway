<?php


namespace Larabookir\Gateway\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Gateway
 *
 * @package Larabookir\Gateway\Models
 * @property int     $id
 *
 * @property string  $name
 * @property string  $merchant_id
 * @property string  $type
 * @property string  $server
 * @property string  $email
 * @property integer $mobile
 * @property string  $description
 * @property string  $username
 * @property string  $password
 * @property int     $terminal_id
 * @property string  $callback_url
 * @property string  $api
 * @property string  $sha1key
 * @property string  $transactionKey
 * @property string  $pin
 * @property string  $certificate_path
 * @property int     $merchant_config_id
 * @property string  $key
 * @property string  $iv
 *
 * @property Carbon  $created_at
 * @property Carbon  $updated_at
 */
class Gateway extends Model
{

    protected $table = 'gateways';

    protected $guarded = [];

    protected $fillable = [
        'merchant_id', 'type', 'server',
        'email', 'mobile', 'description', 'username',
        'password', 'terminal_id', 'callback_url', 'api',
        'sha1key', 'transactionKey', 'pin', 'certificate_path',
        'merchant_config_id', 'key', 'iv',
    ];

    const SERVER_GERMANY = 'germany';
    const SERVER_TEST    = 'test';
    const SERVER_IRAN    = 'iran';
    const SERVERS        = [
        self::SERVER_GERMANY,
        self::SERVER_TEST,
        self::SERVER_IRAN,
    ];

    const TYPES_ZARIN_GATE = 'zarin_gate';
    const TYPES_NORMAL     = 'normal';
    const TYPES            = [
        self::TYPES_ZARIN_GATE,
        self::TYPES_NORMAL,
    ];

}
