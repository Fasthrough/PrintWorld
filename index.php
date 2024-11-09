<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print World Inventory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Print World</h2>
            <nav>
                <a href="#" class="active" onclick="showSection('home')">Home</a>
                <a href="#" onclick="showSection('products')">Products</a>
                <a href="#" onclick="showSection('finances')">Finances</a>
                <a href="#" onclick="showSection('settings')">Settings</a>
                <div class="bottom-links">
                    <a href="#" onclick="showSection('addProduct')">Add Product</a>
                    <a href="#" onclick="showSection('logout')">Log Out</a>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main>
            <!-- Sections -->
            <section id="home" class="content-section active">
                <h1>Dashboard</h1>
                <p>Welcome to the Home section.</p>
            </section>

            <!-- Products Section -->
            <section id="products" class="content-section">
                <h1>Products</h1>
                
                <!-- Frequently Added Items -->
                <div class="frequent-items">
                    <h2>Frequently Added Items</h2>
                    <div class="item-cards">
                        <div class="item-card">
                            <h3>Product 1</h3>
                            <p>Added 120 times</p>
                        </div>
                        <div class="item-card">
                            <h3>Product 2</h3>
                            <p>Added 85 times</p>
                        </div>
                        <div class="item-card">
                            <h3>Product 3</h3>
                            <p>Added 50 times</p>
                        </div>
                        <!-- Add more item cards as needed -->
                    </div>
                </div>

                <!-- Inventory Table -->
                <div class="inventory">
                    <h2>Inventory</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Product A</td>
                                <td>150</td>
                                <td>$25</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Product B</td>
                                <td>80</td>
                                <td>$30</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Product C</td>
                                <td>200</td>
                                <td>$15</td>
                            </tr>
                            <!-- Add more product rows as needed -->
                        </tbody>
                    </table>
                </div>
            </section>

            <section id="finances" class="content-section">
                <h1>Record</h1>
                <p>This is the Finances section.</p>
            </section>

            <section id="settings" class="content-section">
                <h1>Settings</h1>
                <p>This is the Settings section.</p>
            </section>

            <section id="addProduct" class="content-section">
                <h1>Add Product</h1>
                <p>This is the Add Product section.</p>
            </section>

            <section id="logout" class="content-section">
                <h1>Log Out</h1>
                <p>You have logged out.</p>
            </section>
        </main>
    </div>

    <script>
        function showSection(sectionId) {
            // Hide all sections
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(section => section.classList.remove('active'));

            // Remove active class from all sidebar links
            const links = document.querySelectorAll('.sidebar nav a');
            links.forEach(link => link.classList.remove('active'));

            // Show the selected section and add active class to clicked link
            document.getElementById(sectionId).classList.add('active');
            event.target.classList.add('active');
        }
    </script>
</body>
</html>
