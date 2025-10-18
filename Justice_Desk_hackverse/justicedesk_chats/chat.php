<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header('Location: login.php'); exit;
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>JusticeDesk Chat</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background:#f4f6f9; }
    .sidebar { height:80vh; overflow-y:auto; }
    .messages { height:65vh; overflow-y:auto; padding:15px; background:white; border-radius:8px; }
    .message { padding:8px 12px; border-radius:12px; margin:8px 0; max-width:75%; }
    .mine { background:#d1e7dd; margin-left:auto; }
    .other { background:#e2e3e5; }
    .ai { background:#fff3cd; }
    body {
    background: #f1f3f6;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    min-height: 100vh;
  }

  .sidebar {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    max-height: 75vh;
    overflow-y: auto;
  }

  #contacts {
    display: flex;
    flex-direction: column;
  }

  .contact {
    padding: 10px;
    margin-bottom: 5px;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.2s ease;
  }

  .contact:hover, .contact.active {
    background-color: #2575fc;
    color: #fff;
  }

  .card.p-3 {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    max-height: 75vh;
    display: flex;
    flex-direction: column;
  }

  #messages {
    flex: 1;
    overflow-y: auto;
    padding: 10px;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    background: #f9f9f9;
    margin-bottom: 10px;
  }

  .message {
    margin-bottom: 10px;
    max-width: 70%;
    padding: 8px 12px;
    border-radius: 12px;
    word-wrap: break-word;
    font-size: 0.95rem;
  }

  .message.user {
    background: #2575fc;
    color: #fff;
    align-self: flex-end;
    border-bottom-right-radius: 0;
  }

  .message.lawyer, .message.ai {
    background: #e0e0e0;
    color: #333;
    align-self: flex-start;
    border-bottom-left-radius: 0;
  }

  #msgInput {
    border-radius: 20px 0 0 20px;
    border-right: none;
  }

  #sendBtn {
    border-radius: 0 20px 20px 0;
  }

  #aiBtn {
    border-radius: 12px;
  }

  @media (max-width: 768px) {
    .col-md-3, .col-md-9 {
      flex: 100%;
      max-width: 100%;
      margin-bottom: 15px;
    }
    #messages {
      max-height: 50vh;
    }
  }
    
  </style>
</head>
<body>

     <div class="container-fluid p-4">
  <div class="d-flex justify-content-between mb-3">
    <h4>JusticeDesk Chat</h4>
    <div>
      <span class="me-3">Hello, <?php echo htmlspecialchars($_SESSION['name']); ?> (<?php echo $_SESSION['role']; ?>)</span>
      <a href="logout.php" class="btn btn-sm btn-outline-secondary">Logout</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <div class="card sidebar p-2">
        <h6>Contacts</h6>
        <div id="contacts"></div>
      </div>
    </div>

    <div class="col-md-9">
      <div class="card p-3">
        <div class="d-flex justify-content-between mb-2">
          <h6 id="chatWith">Select a contact to chat</h6>
          <div>
            <button id="aiBtn" class="btn btn-sm btn-outline-primary">Ask AI Assistant</button>
          </div>
        </div>
        <div id="messages" class="messages"></div>

        <div class="input-group mt-3">
          <input id="msgInput" class="form-control" placeholder="Type a message...">
          <button id="sendBtn" class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
  </div>
</body>

<script>
let selectedUserId = 0;
const myId = <?php echo json_encode($_SESSION['user_id']); ?>;
function loadContacts() {
  fetch('get_users.php').then(r=>r.json()).then(data=>{
    const c = document.getElementById('contacts');
    c.innerHTML = '';
    data.forEach(u=>{
      const div = document.createElement('div');
      div.className = 'p-2 border-bottom';
      div.style.cursor = 'pointer';
      div.textContent = u.name + ' (' + u.email + ')';
      div.onclick = ()=> { selectedUserId = u.id; document.getElementById('chatWith').textContent = 'Chat with: ' + u.name; loadMessages(); };
      c.appendChild(div);
    });
  });
}

function loadMessages() {
  if (!selectedUserId) return;
  fetch('get_messages.php?other_id=' + selectedUserId)
    .then(r=>r.json()).then(data=>{
      const m = document.getElementById('messages');
      m.innerHTML='';
      data.forEach(msg=>{
        const div = document.createElement('div');
        div.className = 'message ' + (msg.sender_id == myId ? 'mine' : 'other');
        div.innerHTML = '<small><b>' + msg.sender_name + '</b></small><div>' + escapeHtml(msg.message) + '</div><small class="text-muted">' + msg.timestamp + '</small>';
        m.appendChild(div);
      });
      m.scrollTop = m.scrollHeight;
    });
}

document.getElementById('sendBtn').addEventListener('click', ()=>{
  const text = document.getElementById('msgInput').value.trim();
  if (!text || !selectedUserId) return alert('Select a contact and type a message.');
  const fd = new FormData();
  fd.append('receiver_id', selectedUserId);
  fd.append('message', text);
  fetch('send_message.php', { method:'POST', body:fd }).then(r=>r.json()).then(resp=>{
    if (resp.ok) {
      document.getElementById('msgInput').value='';
      loadMessages();
    } else alert('Error: ' + (resp.error || 'unknown'));
  });
});

// Polling for messages every 2 seconds
setInterval(()=>{ if (selectedUserId) loadMessages(); }, 2000);

document.getElementById('aiBtn').addEventListener('click', ()=>{
  const question = prompt('Ask AI Assistant (legal question):');
  if (!question) return;
  const fd = new FormData();
  fd.append('question', question);
  fetch('ai_chat.php', { method:'POST', body:fd }).then(r=>r.json()).then(data=>{
    const m = document.getElementById('messages');
    const div = document.createElement('div');
    div.className = 'message ai';
    div.innerHTML = '<small><b>AI Assistant</b></small><div>' + escapeHtml(data.answer) + '</div><small class="text-muted">' + data.timestamp + '</small>';
    m.appendChild(div);
    m.scrollTop = m.scrollHeight;
  });
});

function escapeHtml(text) {
  if (!text) return '';
  return text.replaceAll('&','&amp;').replaceAll('<','&lt;').replaceAll('>','&gt;').replaceAll('\"','&quot;');
}

loadContacts();
</script>

<script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
</html>