const express = require('express');
const { Pool } = require('pg');
const bodyParser = require('body-parser');
const app = express();
const port = 3000; // Set your desired port number

// Middleware to parse JSON data
app.use(bodyParser.json());

// Serve static files (HTML, CSS, JS) from the current directory
app.use(express.static(__dirname));

// Create a connection pool to the PostgreSQL database
const pool = new Pool({
  host: 'localhost', // Your PostgreSQL host
  user: 'your_username', // Your PostgreSQL username
  password: 'your_password', // Your PostgreSQL password
  database: 'your_database', // Your PostgreSQL database name
  port: 5432 // Default PostgreSQL port
});

// API endpoint to fetch data from the database
app.get('/api/data', async (req, res) => {
  try {
    const result = await pool.query('SELECT * FROM your_table'); // Replace with your table name
    res.json(result.rows);
  } catch (err) {
    console.error('Error executing query:', err.message);
    res.status(500).send('Error fetching data');
  }
});

// API endpoint to handle user login
app.post('/api/login', async (req, res) => {
  const { email, password } = req.body; // Expecting email and password from the client
  try {
    const result = await pool.query(
      'SELECT * FROM users WHERE email = $1 AND password = $2', // Replace 'users' with your table name
      [email, password]
    );
    if (result.rows.length > 0) {
      res.json({ loggedIn: true, user: result.rows[0] });
    } else {
      res.json({ loggedIn: false, message: 'Invalid email or password' });
    }
  } catch (err) {
    console.error('Error during login:', err.message);
    res.status(500).send('Error during login');
  }
});

// Start the server
app.listen(port, () => {
  console.log(`Server is running at http://localhost:${port}`);
});