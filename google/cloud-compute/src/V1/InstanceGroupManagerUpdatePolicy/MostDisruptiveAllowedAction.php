<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InstanceGroupManagerUpdatePolicy;

use UnexpectedValueException;

/**
 * Most disruptive action that is allowed to be taken on an instance. You can specify either NONE to forbid any actions, REFRESH to allow actions that do not need instance restart, RESTART to allow actions that can be applied without instance replacing or REPLACE to allow all possible actions. If the Updater determines that the minimal update action needed is more disruptive than most disruptive allowed action you specify it will not perform the update at all.
 * Additional supported values which may be not listed in the enum directly due to technical reasons:
 * NONE
 * REFRESH
 * REPLACE
 * RESTART
 *
 * Protobuf type <code>google.cloud.compute.v1.InstanceGroupManagerUpdatePolicy.MostDisruptiveAllowedAction</code>
 */
class MostDisruptiveAllowedAction
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_MOST_DISRUPTIVE_ALLOWED_ACTION = 0;</code>
     */
    const UNDEFINED_MOST_DISRUPTIVE_ALLOWED_ACTION = 0;

    private static $valueToName = [
        self::UNDEFINED_MOST_DISRUPTIVE_ALLOWED_ACTION => 'UNDEFINED_MOST_DISRUPTIVE_ALLOWED_ACTION',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

