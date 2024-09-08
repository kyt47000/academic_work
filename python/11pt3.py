import re

def display_numbers_in_file(file_path):
    try:
        with open(file_path, 'r') as file:
            content = file.read()
            
            # Use regular expression to find all numbers in the content
            numbers = re.findall(r'\b\d+\b', content)
            
            return numbers
    except FileNotFoundError:
        print(f"File '{file_path}' not found.")
    except Exception as e:
        print(f"An error occurred: {e}")

# Example usage:
file_path = input("Enter the filename: ")

numbers_found = display_numbers_in_file(file_path)

if numbers_found:
    print(f"Numbers found in '{file_path}':")
    for number in numbers_found:
        print(number)
else:
    print("No numbers found in the file.")
