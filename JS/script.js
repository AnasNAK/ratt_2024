document.addEventListener('DOMContentLoaded', function() {
    const addTaskButton = document.getElementById('addTaskButton');
    const removeTaskButton = document.getElementById('removeTaskButton');
    const highlightTaskButton = document.getElementById('highlightTaskButton');
    const myList = document.getElementById('myList');

    addTaskButton.addEventListener('click', function() {
        const newTask = document.createElement('li');
        newTask.textContent = 'Nouvelle tâche';
        myList.appendChild(newTask);
    });

    removeTaskButton.addEventListener('click', function() {
        const lastTask = myList.lastElementChild;
       
            myList.removeChild(lastTask);
        
    });

    highlightTaskButton.addEventListener('click', function() {
        const firstTask = myList.firstElementChild;

            const tasks = myList.querySelectorAll('li');
            tasks.forEach(task => task.style.backgroundColor = '');
            firstTask.style.backgroundColor = 'yellow'; 

    });
});