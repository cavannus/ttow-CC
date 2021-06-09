from flask import Flask, request
import os, json

app = Flask(__name__)

@app.route('/', methods=["GET"])
def index():
    data = {"status": 200, "data": "Hello World"}
    umur = {
        "budi" : 20,
        "rani" : 21,
        "rina" : 24
    }
    data["val umur"] = umur
    return json.dumps(data)

if __name__ == '__main__':
    # app.run()
    app.run(host="0.0.0.0", port=int(os.environ.get("PORT", 8888)))