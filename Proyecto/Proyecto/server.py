from flask import Flask
from flask import render_template

app = Flask(__name__)

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

app.run(debug = True)

