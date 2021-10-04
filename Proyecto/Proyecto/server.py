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

@app.route('/create', methods=['POST'])
def create_doc():
    if request.form.get('nombreDoc') and request.form.get('autor') and request.form.get('fecha') and "archivo" in request.files:
        archivo = request.files["archivo"]
        mongo.save_file(archivo.filename, archivo)
        id =  mongo.db.documentos.insert(
       {'nombreDoc': request.form.get('nombreDoc'), 'autor':request.form.get('autor'), 'fecha':request.form.get('fecha'), 'nombredoc': archivo.filename}
       )
        response ={
            'id': str(id),
            'nombreDoc': request.form.get('nombreDoc'),
            'autor': request.form.get('autor'),
            'fecha': request.form.get('fecha'),
            'nombredoc': archivo.filename
            }   
        return response
    else:{'massage':'recived'}
    return{'massage':'recived'}

@app.route('/file/<filename>')
def file(filename):
    return mongo.send_file(filename)


app.run(debug = True)

