<?php

class FileProcessor
{
    private $uploadDir;

    public function __construct($uploadDir = 'files/')
    {
        $this->uploadDir = $uploadDir;
    }

    public function uploadFile($file)
    {
        $uploadFile = $this->uploadDir . basename($file['name']);
        if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
            return $uploadFile;
        }
        return false;
    }

    public function processFile($filePath)
    {
        $fileContents = file_get_contents($filePath);
        $lines = explode("\n", $fileContents);
        $output = '';

        foreach ($lines as $line) {
            $lineOutput = '';
            $digitCount = preg_match_all('/\d/', $line);

            if ($lineOutput != '') {
                $lineOutput .= ", ";
            }

            $lineOutput .= trim($line) . ' = ' . $digitCount;
            $output .= $lineOutput . "\n";
        }

        return $output;
    }
}
