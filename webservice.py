from flask import flask, request

app = flask(__name__)

@app.route ('/email', methods=['POST'])

def email ():
    
    print('To: ', request.form['to'])
    print('From: ', request.form['from'])
    print('Date:', request.form['date'])
    print('Subject: ', request.form['subject'])
    print('Message-ID:', request.form['message-id'])
    return ''