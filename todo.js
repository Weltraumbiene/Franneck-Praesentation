document.addEventListener("DOMContentLoaded", function() {
 
    // Define the URL to our PHP API.
    const apiUrl = "todo-api.php";
 
    function loadItems() {
        fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            const todoList = document.getElementById('todo-list');
            todoList.innerHTML = "";
            data.forEach(item => {
                const li = document.createElement('li');
                li.id = item.id;
                li.className = "todo-item"
 
                const span = document.createElement('span');
                span.className = 'todo-text';
                span.textContent = item.text;
                if(item.completed) {
                    span.classList.toggle('done');
                }
 
                const deleteButton = document.createElement('button');
                deleteButton.className = 'btn btn-danger';
                deleteButton.textContent = 'Löschen';
               
 
                const doneButton = document.createElement('button');
                doneButton.className = 'btn btn-success';
                doneButton.textContent = 'Erledigt';
 
 
                // Handle delete button click
                deleteButton.addEventListener('click', function(evt) {
                    fetch(apiUrl, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ id: item.id })                    
                    })
                    .then(response => response.json())
                    .then(() => {
                        li.remove(); // Remove the todo from the list
                    });
                });
 
                //handle done button click
                doneButton.addEventListener('click', function () {
                    fetch(apiUrl, {
                       method: 'PUT' ,
                       headers: {
                        'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ id: item.id })
                    })
                    .then(response => response.json())
                    span.classList.toggle('done');
                });
 
                li.append(span);
                li.appendChild(doneButton);
                li.appendChild(deleteButton);
                todoList.appendChild(li);
            });
        });
    }
 
    document.getElementById('todo-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const todoInput = document.getElementById('todo-input').value;
 
        fetch(apiUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ text: todoInput })
        })
        .then(response => response.json())
        .then(data => {
            loadItems();
        });
    });
 
    loadItems();
});