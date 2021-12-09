<?xml version="1.0" encoding="UTF-8"?>
<Response>
  <Say>Please wait while we connect you to one of customer support team. Please note that calls will be recorded.</Say>

  <Dial record='record-from-answer' action='recording.php'>
    <Number>+441290211999</Number>
  </Dial>

  <!—- Let’s hang up when the dialled call is over --!>
  <Hangup />
</Response>
