import re

def censor_four_letter_words(input_file_path, output_file_path):
    try:
        with open(input_file_path, 'r') as input_file:
            content = input_file.read()

            # Use regular expression to find and replace four-letter words
            censored_content = re.sub(r'\b\w{4}\b', '****', content)

        with open(output_file_path, 'w') as output_file:
            output_file.write(censored_content)
        
        print(f"Censoring completed. Censored content saved to '{output_file_path}'.")
    except FileNotFoundError:
        print(f"File '{input_file_path}' not found.")
    except Exception as e:
        print(f"An error occurred: {e}")

# Example usage:
input_file_path = input("Enter the input filename: ")
output_file_path = input("Enter the output filename for censored content: ")

censor_four_letter_words(input_file_path, output_file_path)
