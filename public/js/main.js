let connection = new WebSocket('ws://laurencf-web-socket.herokuapp.com');

connection.onopen = () => {
  console.log('connected from the frontend');
  //
  // connection.send('hello');
};

connection.onerror = () => {
  console.log('failed to connect from the frontend');
};

connection.onmessage = (event) => {
  console.log('received content update', event.data);
  document.querySelector('#content').innerText = event.data;
};

document.querySelector('form').addEventListener('input', () => {
  let content = document.querySelector('#content').value;
  connection.send(content);//send new content to websocket
});
