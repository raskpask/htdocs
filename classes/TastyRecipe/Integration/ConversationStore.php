<?php

namespace TastyRecipe\Integration;

use TastyRecipe\Model\Entry;

class ConversationStore
{
    const FILE_NAME = 'pancakeComments.txt';
    const PATH_TO_APP_ROOT = '/../../../';
    const ENTRY_DELIMITER = ";\n";
    private $file_path;

    public function __construct()
    {
        $this->file_path = __DIR__ . self::PATH_TO_APP_ROOT . self::FILE_NAME;
    }

    public function addEntry(Entry $entry, $recipe)
    {

        if ($recipe == 0) {
            $filename = 'pancakeComments.txt';
        } else {
            $filename = 'meatballsComments.txt';
        }
        file_put_contents($filename, serialize($entry) . ";\n", FILE_APPEND);
    }

    public function getConversation($recipe)
    {
        if ($recipe == 0) {
            $filename = 'pancakeComments.txt';
        } else {
            $filename = 'meatballsComments.txt';
        }
        $entries = explode(";\n", file_get_contents($filename));
        $entriesR;
        for ($i = count($entries) - 1; $i >= 0; $i--) {
            $entry = unserialize($entries[$i]);

            if ($entry instanceof Entry and !($entry->isDeleted())) {
                $entriesR[]=$entry;
            }
        }
        return $entriesR;
    }

    /**
     * @return string
     */
    public function deleteEntry($timestamp,$recipe)
    {
        if ($recipe == 0) {
            $filename = 'pancakeComments.txt';
        } else {
            $filename = 'meatballsComments.txt';
        }

        $entries = explode(";\n", file_get_contents($filename));
        for ($i = count($entries) - 1; $i >= 0; $i--) {
            $entry = unserialize($entries[$i]);
            if ($entry instanceof Entry and !($entry->isDeleted())) {
                if(($entry->getTimestamp()== $timestamp)){
                    $entry->setDeleted(true);
                }
                $entries[$i] = serialize($entry);

            }
        }

        file_put_contents($filename, implode(";\n", $entries));
    }


}

