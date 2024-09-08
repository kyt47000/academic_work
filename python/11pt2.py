def count_alphabet_occurrences(file_path):
    try:
        with open(file_path, 'r') as file:
            content = file.read()
            
            # Count occurrences of each alphabet
            alphabet_counts = {}
            for char in content:
                if char.isalpha():
                    char_lower = char.lower()
                    alphabet_counts[char_lower] = alphabet_counts.get(char_lower, 0) + 1
            
            return alphabet_counts
    except FileNotFoundError:
        print(f"File '{file_path}' not found.")
    except Exception as e:
        print(f"An error occurred: {e}")

# Example usage:
file_path = input("Enter the filename: ")

alphabet_occurrences = count_alphabet_occurrences(file_path)

if alphabet_occurrences:
    print(f"Occurrences of each alphabet in '{file_path}':")
    for char, count in alphabet_occurrences.items():
        print(f"{char}: {count}")
