from flask import Flask, request
from flask import render_template
from flask_pymongo import PyMongo
from werkzeug.wrappers import response

app = Flask(__name__)
app.config['MONGO_URI']='mongodb://localhost:27017/pruebassss'
mongo=PyMongo(app)

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/add')
def add():
    return 'Agregar documento'

@app.route('/delete/<document>/<id>/')
def delete(document, id):
    return 'Borrar documento : {}, {}'.format(document, id)

@app.route('/export/<document>/<id>/')
def export(document, id):
    return 'Exportar docuemento : {}, {}'.format(document, id)

@app.route('/edit/<document>/<id>/')
def edit(document, id):
    return render_template('edit.html')

@app.route('/probar', methods=['POST'])
def create_doc():
    nombreDoc = request.json['nombreDoc']
    autor = request.json['autor']
    fecha = request.json['fecha']

    if nombreDoc and autor and fecha:
        id =  mongo.db.documentos.insert(
       {'nombreDoc':nombreDoc, 'autor':autor, 'fecha':fecha}
       )
        response ={
            'id': str(id),
            'nombreDoc': nombreDoc,
            'autor': autor,
            'fecha': fecha
            }   
        return response
    else:{'massage':'recived'}
    return{'massage':'recived'}

app.run(debug = True)

