// app.js

const express = require('express');
const http = require('http');
const socketIo = require('socket.io');

const app = express();
const server = http.createServer(app);
const io = socketIo(server);

const PORT = process.env.PORT || 3000;

io.on('connection', (socket) => {
    console.log('Novo usuário conectado');

    socket.on('disconnect', () => {
        console.log('Usuário desconectado');
    });

    socket.on('sendMessage', (message) => {
        console.log('Mensagem recebida:', message);
        io.emit('receiveMessage', message);
    });
});

server.listen(PORT, () => {
    console.log(`Servidor rodando na porta ${PORT}`);
});
