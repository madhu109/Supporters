<?php
// ai_chat.php - AI assistant mockup
// Replace with real API calls to OpenAI or your chosen LLM service.
// Example (pseudo):
// 1) Receive POST['question']
// 2) Call OpenAI with the question and system prompt (legal-friendly)
// 3) Return JSON with the assistant's answer and timestamp
header('Content-Type: application/json');
session_start();
$question = isset($_POST['question']) ? trim($_POST['question']) : '';

if (!$question) {
  echo json_encode(['answer'=>'Please provide a question.','timestamp'=>date('Y-m-d H:i:s')]);
  exit;
}

// --- MOCKED RESPONSE (you should replace this with real API integration) ---
// A simple heuristic: detect keywords and return canned answers.
$answer = "I'm an AI legal assistant (mock). Here's a brief answer: \n\n";
if (stripos($question, 'section') !== false || stripos($question, 'ipc') !== false) {
  $answer .= "Sections of IPC vary. For example, Section 420 IPC deals with cheating and dishonestly inducing delivery of property. Punishment can include imprisonment and fine. This is a simplified explanation — consult a lawyer for case-specific advice.";
} else if (stripos($question, 'divorce') !== false) {
  $answer .= "Divorce laws depend on grounds and jurisdiction. Common grounds include cruelty, adultery, mutual consent. Legal procedures require filing petitions and hearings.";
} else {
  $answer .= "I cannot give legal advice here, but I can summarize public legal provisions and point you to relevant sections. For detailed, case-specific counsel, please contact a lawyer.";
}

echo json_encode(['answer'=>$answer, 'timestamp'=>date('Y-m-d H:i:s')]);
?>