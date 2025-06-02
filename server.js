const express = require('express');
const { createProxyMiddleware } = require('http-proxy-middleware');
const bodyParser = require('body-parser');
const app = express();
const port = 5225;

// Proxy API requests to another server
// Replace with your actual target server address and port
const targetServer = 'http://another-server-address:3000';

app.use('/api', createProxyMiddleware({
  target: targetServer,
  changeOrigin: true,
}));

// Serve static files (HTML, CSS, JS) from the current directory
app.use(express.static(__dirname));

// Start the server on all interfaces
app.listen(port, '0.0.0.0', () => {
  console.log(`Proxy server is running at http://0.0.0.0:${port}`);
  console.log(`API requests are forwarded to ${targetServer}`);
});