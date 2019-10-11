from flask import Flask, request, jsonify
from jsonschema import validate
from jsonschema.exceptions import ValidationError
app = Flask (__name__)
search_schema = {
    "type" : "object"
}
##Restlet Client 사용

@app.route('/')
def hello_world():
    return 'hello world'

@app.route('/user/<userName>')
def hello_user(userName):
    return 'hello,%s'%(userName)

@app.route('/userLogin',methods = ['POST'])
def userLogin():
    user = request.get_json()
    return jsonify(user)


@app.route('/environments/<language>')
def environments(language):
    return jsonify({"language":language})


if __name__ == "__main__":
    app.run()
