def create_and_write_file(file_path, content):
    with open(file_path, 'w') as file:
        file.write(content)
    print(f"File '{file_path}' created and written successfully.")

def read_entire_file(file_path):
    with open(file_path, 'r') as file:
        content = file.read()
    print(f"Content of '{file_path}':\n{content}")

def read_file_line_by_line(file_path):
    with open(file_path, 'r') as file:
        lines = file.readlines()
    print(f"Content of '{file_path}' line by line:")
    for line in lines:
        print(line.strip())

def write_string_to_file(file_path, content):
    with open(file_path, 'w') as file:
        file.write(content)
    print(f"String written to '{file_path}' successfully.")

def write_list_to_file(file_path, content_list):
    with open(file_path, 'w') as file:
        for item in content_list:
            file.write(f"{item}\n")
    print(f"List written to '{file_path}' successfully.")

def count_lines_words(file_path):
    with open(file_path, 'r') as file:
        lines = file.readlines()
        words = sum(len(line.split()) for line in lines)
    print(f"Number of lines in '{file_path}': {len(lines)}")
    print(f"Number of words in '{file_path}': {words}")

# Example usage:
file_path = 'example.txt'
string_content = "This is a sample text file.\nIt has multiple lines.\nPython programming is fun!"

# Create and write a file
create_and_write_file(file_path, string_content)

# Read entire file
read_entire_file(file_path)

# Read file line by line
read_file_line_by_line(file_path)

# Write a string to a file
write_string_to_file(file_path, "New content added!")

# Write a list of strings to a file
list_content = ["Line 1", "Line 2", "Line 3"]
write_list_to_file(file_path, list_content)

# Count the number of lines and words in a file
count_lines_words(file_path)
