# Laravel Developer Interview Task - Lilac Infotech

This Laravel project is a simple demonstration of creating and managing Users, Designations, and Departments, with the ability to search and sort through these entities using jQuery.

## Project Requirements

1. **Database Migration**:
    - Create and migrate the database with three tables: `users`, `designations`, and `departments`.
    - Insert data into these tables during the migration process.

2. **Tables Structure**:
    - **Users**:
        - `id`: Primary Key
        - `name`: User's name
        - `fk_department`: Foreign Key referencing `departments`
        - `fk_designation`: Foreign Key referencing `designations`
        - `phone_number`: User's phone number
        - `created_at`: Timestamp of record creation

    - **Designations**:
        - `id`: Primary Key
        - `name`: Designation name
        - `created_at`: Timestamp of record creation

    - **Departments**:
        - `id`: Primary Key
        - `name`: Department name
        - `created_at`: Timestamp of record creation

3. **Blade View**:
    - A view is designed to display a list of users with their names, departments, and designations.
    - Users can search by Name, Department, or Designation, with the results sorted using jQuery.

## Installation & Setup

Follow the steps below to set up the project on your local machine:

### 1. Clone the Repository
```bash
git clone https://github.com/yourusername/lilac-infotech-interview-task.git
cd lilac-infotech-interview-task
