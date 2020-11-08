<?php

namespace App\Laratables;

class CustomUser
{
    /**
     * Change date format of start_date column value.
     *
     * @param \App\User
     * @return string
     */
    public static function laratablesCreatedAt($user)
    {
        return date('d-m-Y', strtotime($user->created_at));
    }

    /**
     * First_name column should be used for sorting when Name column is selected in Datatables.
     *
     * @return string
     */
    public static function laratablesOrderName()
    {
        return 'created_at';
    }

    /**
     * Returns the action Column html for datatables.
     *
     * @param \App\User
     * @return string
     */
    public static function laratablesCustomAction($user)
    {
        return view('backend::users.action', compact('user'))->render();
    }

    /**
    * Sets the serial number column value for each user.
    *
    * @param \Illuminate\Support\Collection
    * @return \Illuminate\Support\Collection
    **/
    public static function laratablesModifyCollection($users)
    {
        return $users->map(function ($user, $key) {
            $user->serial_no = $key + 1 + request()->input('start');
            return $user;
        });
    }

    /**
     * Returns the custom column serial number value for table.
     *
     * @param \App\User $user
     * @return string
     **/
    public static function laratablesCustomSerialNo($user)
    {
        return $user->serial_no;
    }
}
