<?php

namespace App\Repositories\Contracts;

/**
 * Interface BaseRepository.
 */
interface BaseRepository
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query();

    /**
     * @param array $attributes
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function make(array $attributes = []);
}
