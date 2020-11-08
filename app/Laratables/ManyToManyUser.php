<?php
namespace App\Laratables;

class ManyToManyUser
{
    /**
     * Eager load roles of the user.
     *
     * @param \Illuminate\Database\Eloquent\Builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function laratablesQueryConditions($query)
    {
        return $query->with('roles');
    }

    /**
     * Display the relationship data in custom column(user_roles).
     *
     * @param \App\User
     * @return string
     */
    public static function laratablesCustomUserRoles($user)
    {
        return $user->roles->implode('name', ',');
    }

    /**
     * Adds the condition for searching the User Roles.
     *
     * @param \Illuminate\Database\Eloquent\Builder
     * @param string search term
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function laratablesSearchUserRoles($query, $searchValue)
    {
        return $query->orWhereHas('roles', function ($query) use ($searchValue) {
            $query->where('name', 'like', "%". $searchValue ."%");
        });
    }
}
