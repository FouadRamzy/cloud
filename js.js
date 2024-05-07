
window.onload = function() {
    function displayStudentData() {
        fetch('get_student_data.php')
            .then(response => response.json())
            .then(data => {
                const studentDataContainer = document.getElementById('studentData');
                studentDataContainer.innerHTML = '';

                data.forEach(student => {
                    const studentDiv = document.createElement('div');
                    studentDiv.classList.add('student');
                    studentDiv.innerHTML = `
                        <p><strong>Name:</strong> ${student.Name}</p>
                        <p><strong>ID:</strong> ${student.ID}</p>
                        <p><strong>Age:</strong> ${student.Age}</p>
                        <p><strong>CGPA:</strong> ${student.CGPA}</p>
                    `;
                    studentDataContainer.appendChild(studentDiv);
                });
            })
            .catch(error => console.error('Error fetching student data:', error));
    }
    displayStudentData();
};
