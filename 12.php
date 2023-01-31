<?php

function canVote($age): string {
    if ($age < 18) {
        return "{$age} years old - not allowed to vote.";
    }
    return "{$age} years old - eligible to vote.";
}

echo canVote(17);