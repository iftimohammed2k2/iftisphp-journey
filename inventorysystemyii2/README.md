# 🧾 Inventory Management System (Yii2 + SQLite)

This is a simple **Inventory CRUD system** built with the **Yii2 Framework** and **SQLite** database.

## 📁 Features

- ✅ Add new products
- ✅ View product list
- ✅ Update existing products
- ✅ Delete products

## 🛠 Tech Stack

- PHP (Yii2 Framework)
- SQLite
- Bootstrap (default Yii2 styling)

## 🧪 Setup Instructions

### 1. Clone the repository

```bash
git clone https://github.com/iftimohammed2k2/iftisphp-journey.git
cd iftisphp-journey/inventorysystemyii2
2. Install dependencies

composer install

3. Configure database (SQLite)

Inside config/db.php, set:

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'sqlite:@app/data/inventory.db',
];

Create the SQLite file:

mkdir data
sqlite3 data/inventory.db

In the SQLite prompt, paste:

CREATE TABLE product (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    quantity INTEGER,
    price REAL
);
.quit

4. Run local server

php yii serve --port=8080

Visit:
📍 http://localhost:8080/index.php?r=product

🧠 CRUD Generation via Gii

Start Gii:

php yii serve --port=8080

Open:
📍 http://localhost:8080/index.php?r=gii

Use these:

Model Class: app\models\Product

Controller Class: app\controllers\ProductController

View Path: @app/views/product


Generate ✅


---

👤 Author

IFTI Mohammed
📫 GitHub: iftimohammed2k2

🪪 License

MIT
