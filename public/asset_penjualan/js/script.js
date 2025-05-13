        document.addEventListener('DOMContentLoaded', function() {
            // Cart state
            const cart = {
                items: [],
                subtotal: 0,
                tax: 0,
                total: 0,
                taxRate: 0.11
            };

            // DOM elements
            const cartItemsEl = document.getElementById('cart-items');
            const subtotalEl = document.getElementById('subtotal');
            const taxEl = document.getElementById('tax');
            const totalEl = document.getElementById('total');
            const printBtn = document.getElementById('print-btn');
            const paymentBtn = document.getElementById('payment-btn');
            const menuItems = document.querySelectorAll('.menu-item');

            // menambahkan menu
            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    const name = this.getAttribute('data-name');
                    const price = parseFloat(this.getAttribute('data-price'));
                    
                    addToCart(name, price);
                });
            });

            // Add item 
            function addToCart(name, price) {
                // Check item 
                const existingItem = cart.items.find(item => item.name === name);
                
                if (existingItem) {
                    existingItem.quantity += 1;
                    existingItem.total = existingItem.quantity * existingItem.price;
                } else {
                    cart.items.push({
                        name,
                        price,
                        quantity: 1,
                        total: price
                    });
                }
                
                updateCart();
            }

            // Update cart UI
            function updateCart() {

                // Calculate totals
                cart.subtotal = cart.items.reduce((sum, item) => sum + item.total, 0);
                cart.tax = cart.subtotal * cart.taxRate;
                cart.total = cart.subtotal + cart.tax;
                
                // Update cart items display
                if (cart.items.length === 0) {
                    cartItemsEl.innerHTML = '<div class="empty-cart">Your cart is empty</div>';
                } else {
                    cartItemsEl.innerHTML = cart.items.map(item => `
                        <div class="cart-item" data-name="${item.name}">
                            <div class="item-name">${item.name}</div>
                            <div class="item-quantity">
                                <button class="quantity-btn minus-btn">-</button>
                                <span class="quantity">${item.quantity}</span>
                                <button class="quantity-btn plus-btn">+</button>
                            </div>
                            <div class="item-price">Rp.${item.total.toFixed(2)}</div>
                        </div>
                    `).join('');
                    
                    
                    document.querySelectorAll('.minus-btn').forEach(btn => {
                        btn.addEventListener('click', function(e) {
                            e.stopPropagation();
                            const itemName = this.closest('.cart-item').getAttribute('data-name');
                            updateQuantity(itemName, -1);
                        });
                    });
                    
                    document.querySelectorAll('.plus-btn').forEach(btn => {
                        btn.addEventListener('click', function(e) {
                            e.stopPropagation();
                            const itemName = this.closest('.cart-item').getAttribute('data-name');
                            updateQuantity(itemName, 1);
                        });
                    });
                }
                
                // Update total display
                subtotalEl.textContent = `Rp. ${cart.subtotal.toFixed(2)}`;
                taxEl.textContent = `Rp. ${cart.tax.toFixed(2)}`;
                totalEl.textContent = `Rp. ${cart.total.toFixed(2)}`;
            }

            // Update quantity
            function updateQuantity(name, change) {
                const item = cart.items.find(item => item.name === name);
                
                if (item) {
                    item.quantity += change;
                    
                    if (item.quantity <= 0) {
                        // Remove item if quantity reaches 0
                        cart.items = cart.items.filter(i => i.name !== name);
                    } else {
                        item.total = item.quantity * item.price;
                    }
                    
                    updateCart();
                }
            }

            // Fungsi Button Print
            printBtn.addEventListener('click', function() {
                if (cart.items.length === 0) {
                    alert('Cart is empty!');
                    return;
                }
                
                // Buat Print Faktur
                const receipt = `
                    C-FOOD 14 Receipt
                    Table: ${document.getElementById('order-number').textContent}
                    ----------------------------
                    ${cart.items.map(item => `
                    ${item.name} x${item.quantity} - $${item.total.toFixed(2)}
                    `).join('')}
                    ----------------------------
                    Subtotal: Rp. ${cart.subtotal.toFixed(2)}
                    Tax: Rp. ${cart.tax.toFixed(2)}
                    Total: Rp. ${cart.total.toFixed(2)}
                    ----------------------------
                    Thank you for your order!
                `;
                
                 // Buat Demo 
                console.log(receipt);
                alert('Receipt sent to printer!');
            });

            // Fungsi Payment Button
            paymentBtn.addEventListener('click', function() {
                if (cart.items.length === 0) {
                    alert('Cart is empty!');
                    return;
                }
                
                // Buat ke payment modal
                alert(`Processing payment for Rp. ${cart.total.toFixed(2)}`);
                
                // Buat clear chart
                cart.items = [];
                updateCart();
            });
        });