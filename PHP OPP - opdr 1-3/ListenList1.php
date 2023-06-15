<?php

class ListenList
{
    public array $Music = [];

    public function addMovie(Music $Music): void
    {
        if($this->checkMusic($Music))
        {
            $this->Music[] = $Music;
        }
    }


private function checkMusic(Music $Music)
{
    if(in_array($Music, $this->Music))
    {
        return false;
    }

    return false;

}

public function countMusic(): int
{
    return count($this->Music);
}

}