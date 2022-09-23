<?php

function removeDuplicatesFromTxtFile(
    string $duplicatesPath,
    string $noDuplicatesPath
): void
{
    $lines = file(
        filename: $duplicatesPath
    );
    
    $lines = array_unique(
        array: $lines
    );
    
    $lines = implode(
        $lines
    );
    
    file_put_contents(
        filename: $noDuplicatesPath, 
        data: $lines
    );
}
