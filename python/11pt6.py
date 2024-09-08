def remove_whitespace_and_interleave(file1_path, file2_path):
    try:
        with open(file1_path, 'r') as file1, open(file2_path, 'r') as file2:
            # Read and remove white spaces from both strings
            string1 = file1.read().replace(" ", "")
            string2 = file2.read().replace(" ", "")

            # Interleave the characters of both strings
            interleaved_string = ''.join(''.join(pair) for pair in zip(string1, string2))

            print("Interleaved String:", interleaved_string)
    except FileNotFoundError:
        print(f"One or both files not found.")
    except Exception as e:
        print(f"An error occurred: {e}")

# Example usage:
file1_path = input("Enter the first filename: ")
file2_path = input("Enter the second filename: ")

remove_whitespace_and_interleave(file1_path, file2_path)
