import React, { useState } from 'react';
import { Card, CardContent } from '@/components/ui/card';
import { Button } from '@/components/ui/button';

const StudentManagementSystem = () => {
  const [students, setStudents] = useState([]);
  const [form, setForm] = useState({ id: '', name: '', age: '', course: '' });
  const [isEditing, setIsEditing] = useState(false);

  const handleChange = (e) => {
    const { name, value } = e.target;
    setForm({ ...form, [name]: value });
  };

  const handleAddOrUpdate = () => {
    if (isEditing) {
      setStudents(students.map((student) => (student.id === form.id ? form : student)));
      setIsEditing(false);
    } else {
      setStudents([...students, { ...form, id: Date.now().toString() }]);
    }
    setForm({ id: '', name: '', age: '', course: '' });
  };

  const handleEdit = (student) => {
    setForm(student);
    setIsEditing(true);
  };

  const handleDelete = (id) => {
    setStudents(students.filter((student) => student.id !== id));
  };

  return (
    <div className="p-4 max-w-md mx-auto">
      <h1 className="text-2xl font-bold mb-4">Student Management System</h1>
      <Card className="mb-4">
        <CardContent>
          <input
            type="text"
            name="name"
            value={form.name}
            onChange={handleChange}
            placeholder="Name"
            className="w-full p-2 mb-2 border rounded"
          />
          <input
            type="number"
            name="age"
            value={form.age}
            onChange={handleChange}
            placeholder="Age"
            className="w-full p-2 mb-2 border rounded"
          />
          <input
            type="text"
            name="course"
            value={form.course}
            onChange={handleChange}
            placeholder="Course"
            className="w-full p-2 mb-2 border rounded"
          />
          <Button onClick={handleAddOrUpdate} className="w-full">
            {isEditing ? 'Update Student' : 'Add Student'}
          </Button>
        </CardContent>
      </Card>

      {students.map((student) => (
        <Card key={student.id} className="mb-2">
          <CardContent className="flex justify-between items-center">
            <div>
              <p><strong>Name:</strong> {student.name}</p>
              <p><strong>Age:</strong> {student.age}</p>
              <p><strong>Course:</strong> {student.course}</p>
            </div>
            <div className="flex space-x-2">
              <Button onClick={() => handleEdit(student)}>Edit</Button>
              <Button onClick={() => handleDelete(student.id)} variant="destructive">
                Delete
              </Button>
            </div>
          </CardContent>
        </Card>
      ))}
    </div>
  );
};

export default StudentManagementSystem;
