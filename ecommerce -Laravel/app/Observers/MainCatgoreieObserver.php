<?php

namespace App\Observers;

use App\Models\Admin\MainCatgorie;

class MainCatgoreieObserver
{
    /**
     * Handle the MainCatgorie "created" event.
     *
     * @param  \App\Models\Admin\MainCatgorie  $mainCatgorie
     * @return void
     */
    public function created(MainCatgorie $mainCatgorie)
    {
        //
    }

    /**
     * Handle the MainCatgorie "updated" event.
     *
     * @param  \App\Models\Admin\MainCatgorie  $mainCatgorie
     * @return void
     */
    public function updated(MainCatgorie $mainCatgorie)
    {
        $mainCatgorie->vendors()->update(['active' => $mainCatgorie->active]);
    }

    /**
     * Handle the MainCatgorie "deleted" event.
     *
     * @param  \App\Models\Admin\MainCatgorie  $mainCatgorie
     * @return void
     */
    public function deleted(MainCatgorie $mainCatgorie)
    {
        //
    }

    /**
     * Handle the MainCatgorie "restored" event.
     *
     * @param  \App\Models\Admin\MainCatgorie  $mainCatgorie
     * @return void
     */
    public function restored(MainCatgorie $mainCatgorie)
    {
        //
    }

    /**
     * Handle the MainCatgorie "force deleted" event.
     *
     * @param  \App\Models\Admin\MainCatgorie  $mainCatgorie
     * @return void
     */
    public function forceDeleted(MainCatgorie $mainCatgorie)
    {
        //
    }
}
