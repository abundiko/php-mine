<?php

/**
 * Checks if the given date and time is more than 24 hours in the past.
 *
 * @param string $dateTimeString The date and time to check.
 * @return bool Returns true if the given date and time is more than 24 hours in the past, false otherwise.
 */
function isMoreThan24HoursPast($dateTimeString)
{
  $currentDateTime = new DateTime();
  $paramDateTime = new DateTime($dateTimeString);

  $timeDifference = $currentDateTime->diff($paramDateTime);

  return $timeDifference->days > 0 || $timeDifference->h >= 24;
}
