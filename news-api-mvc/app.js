const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');
const newsRoutes = require('./routes/newsRoutes');

const app = express();
const PORT = process.env.PORT || 3000;
const MONGODB_URI = 'mongodb://localhost:27017/news_db';

mongoose.connect(MONGODB_URI, { useNewUrlParser: true, useUnifiedTopology: true })
    .then(() => console.log('MongoDB connected'))
    .catch(err => console.error('MongoDB connection error:', err));

app.use(bodyParser.json());
app.use('/api/v1/news', newsRoutes);

app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
