// replace these values with those generated in your TokBox Account
var apiKey = "46940224";
var sessionId = "2_MX40Njk0MDIyNH5-MTYwMjA1MTY3MjI1OX5XTHJTdnlvd1kxL09QbDh0S0NGU1pUbzJ-fg";
var token = "T1==cGFydG5lcl9pZD00Njk0MDIyNCZzaWc9NDUxYzA2Y2MyNjVhNTE0YzMyMmVhZTBiODdjNTkzMTM0NTQxYjJkZTpzZXNzaW9uX2lkPTJfTVg0ME5qazBNREl5Tkg1LU1UWXdNakExTVRZM01qSTFPWDVYVEhKVGRubHZkMWt4TDA5UWJEaDBTME5HVTFwVWJ6Si1mZyZjcmVhdGVfdGltZT0xNjAyMDUxNzU3Jm5vbmNlPTAuMjc4NjE4Mzg3MjM1MDM5NCZyb2xlPXB1Ymxpc2hlciZleHBpcmVfdGltZT0xNjA0NjQ3MzU2JmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9";

// (optional) add server code here
var SERVER_BASE_URL = 'https://lifegrow-videoapp.herokuapp.com';
fetch(SERVER_BASE_URL + '/session').then(function(res) {
  return res.json()
}).then(function(res) {
  apiKey = res.apiKey;
  sessionId = res.sessionId;
  token = res.token;
  initializeSession();
}).catch(handleError);


  // Handling all of our errors here by alerting them
  function handleError(error) {
    if (error) {
      alert(error.message);
    }
  }
  
  function initializeSession() {
    var session = OT.initSession(apiKey, sessionId);
  
    // Subscribe to a newly created stream
    session.on('streamCreated', function(event) {
        session.subscribe(event.stream, 'subscriber', {
          insertMode: 'append',
          width: '100%',
          height: '100%'
        }, handleError);
      });
  
    // Create a publisher
    var publisher = OT.initPublisher('publisher', {
      insertMode: 'append',
      width: '100%',
      height: '100%'
    }, handleError);
  
    // Connect to the session
    session.connect(token, function(error) {
      // If the connection is successful, publish to the session
      if (error) {
        handleError(error);
      } else {
        session.publish(publisher, handleError);
      }
    });
  }