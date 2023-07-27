from socket import*
servername = 'servername'
serverport = 12000
serversocket = socket(AF_INET,SOCK_STREAM)
serversocket.bind(('',serverport))
serversocket.listen(1)
print('the server is ready to receive')
while True:
   connectionsocket, addr = serversocket.accept()
   sentence = connectionsocket.recv(1024).decode()
   capitalizedsentence = sentence.upper()
   connectionsocket.send(capitalizedsentence.encode())
   connectionsocket.close()
