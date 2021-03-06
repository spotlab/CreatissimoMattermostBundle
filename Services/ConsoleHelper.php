<?php

namespace Creatissimo\MattermostBundle\Services;

use Symfony\Component\Console\Input\InputInterface;

/**
 * Class ConsoleHelper
 * @package Creatissimo\MattermostBundle\Services
 */
class ConsoleHelper
{
    /**
     * @param InputInterface $input
     *
     * @return null|string
     */
    public function argumentsToString(InputInterface $input): ?string
    {
        $argumentString = null;
        $argumentArray  = [];
        $arguments      = $input->getArguments();
        if (is_array($arguments) && count($arguments) > 0) {
            foreach ($arguments as $name => $value) {
                if (is_bool($value)) {
                    $value = $this->convertBoolToSting($value);
                }
                $argumentArray[] = $name . ': ' . $value;
            }
            if (count($argumentArray) > 0) {
                $argumentString = implode("\n", $argumentArray);
            }
        }

        return $argumentString;
    }

    /**
     * @param InputInterface $input
     *
     * @return null|string
     */
    public function optionsToString(InputInterface $input): ?string
    {
        $optionString = null;
        $optionArray  = [];
        $options      = $input->getArguments();
        if (is_array($options) && count($options) > 0) {
            foreach ($options as $name => $value) {
                if (is_bool($value)) {
                    $value = $this->convertBoolToSting($value);
                }
                $optionArray[] = $name . ': ' . $value;
            }
            if (count($optionArray) > 0) {
                $optionString = implode("\n", $optionArray);
            }
        }

        return $optionString;
    }

    private function convertBoolToSting(bool $value): string
    {
        return $value ? 'true' : 'false';
    }
}
