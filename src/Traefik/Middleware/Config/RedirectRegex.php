<?php

namespace Traefik\Middleware\Config;

class RedirectRegex {


    protected string $regex;
    protected string $replacement;
    protected bool $permanent;

    /**
     * @return string|null
     */
    public function getRegex(): ?string {
        return $this->regex ?? null;
    }

    /**
     * @param string $regex
     * @return $this
     */
    public function setRegex(string $regex): self {
        $this->regex = $regex;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReplacement(): ?string {
        return $this->replacement ?? null;
    }

    /**
     * @param string $replacement
     * @return $this
     */
    public function setReplacement(string $replacement): self {
        $this->replacement = $replacement;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isPermanent(): ?bool {
        return $this->permanent ?? null;
    }

    /**
     * @param bool $permanent
     * @return $this
     */
    public function setPermanent(bool $permanent): self {
        $this->permanent = $permanent;
        return $this;
    }

}