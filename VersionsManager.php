<!-- kata link: https://www.codewars.com/kata/5bc7bb444be9774f100000c3/php -->
<?php
class VersionManager
{
    private $major;
    private $minor;
    private $patch;
    private $versions;

    public function __construct($version = "")
    {
        if ($version === "") {
            $version = '0.0.1';
        }

        list($major, $minor, $patch) = array_slice(explode('.', $version . '.0.0'), 0, 3);

        if (!is_numeric($major) || !is_numeric($minor) || !is_numeric($patch)) {
            throw new Exception('Error occured while parsing version!');
        }

        $this->major = $major;
        $this->minor = $minor;
        $this->patch = $patch;

        $this->versions = [];
    }

    private function keepVersions()
    {
        $this->versions[] = [$this->major, $this->minor, $this->patch];
    }

    public function major()
    {
        $this->keepVersions();
        $this->major++;
        $this->minor = 0;
        $this->patch = 0;
        return $this;
    }

    public function minor()
    {
        $this->keepVersions();
        $this->minor++;
        $this->patch = 0;
        return $this;
    }

    public function patch()
    {
        $this->keepVersions();
        $this->patch++;
        return $this;
    }

    public function rollback()
    {
        if (empty($this->versions)) {
            throw new Exception("Cannot rollback!");
        }

        list($this->major, $this->minor, $this->patch) = array_pop($this->versions);
        return $this;
    }

    public function release()
    {
        return "{$this->major}.{$this->minor}.{$this->patch}";
    }
}
