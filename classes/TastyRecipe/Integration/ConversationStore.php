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
        for ($i = count($entries) - 1; $i >= 0; $i--) {
            $entry = unserialize($entries[$i]);
            if ($entry instanceof Entry and !($entry->isDeleted())) {
                $entries[$i]=$entry;
            }
        }
        return $entries;
    }

    /**
     * @return string
     */
    public function deleteEntry($timestamp)
    {
        $file_path = $this->file_path;
        $entry_delimiter = self::ENTRY_DELIMITER;
        $this->examineConversation(function (array &$entries, Entry $entry) use ($timestamp, $file_path, $entry_delimiter) {
            if ($entry->gettTimestamp() === $timestamp) {
                $entry->setDeleted(true);
            }
            \array_push($entries, serialize($entry));
            file_put_contents($file_path, implode($entry_delimiter, $entries) . $entry_delimiter);
        });
    }


}

