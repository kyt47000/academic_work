import string

def calculate_average_lengths(file_path):
    try:
        with open(file_path, 'r') as file:
            content = file.read()

            # Split the content into sentences and words
            sentences = content.split('.')
            words = content.split()

            # Remove punctuation from words
            words = [word.strip(string.punctuation) for word in words]

            # Calculate average word length
            avg_word_length = sum(len(word) for word in words) / len(words) if words else 0

            # Calculate average sentence length
            avg_sentence_length = sum(len(sentence.split()) for sentence in sentences) / len(sentences) if sentences else 0

            return avg_word_length, avg_sentence_length
    except FileNotFoundError:
        print(f"File '{file_path}' not found.")
    except Exception as e:
        print(f"An error occurred: {e}")

# Example usage:
file_path = input("Enter the filename: ")

avg_word_length, avg_sentence_length = calculate_average_lengths(file_path)

if avg_word_length and avg_sentence_length:
    print(f"Average Word Length: {avg_word_length:.2f} characters")
    print(f"Average Sentence Length: {avg_sentence_length:.2f} words")
else:
    print("Unable to calculate averages. Check if the file exists and contains text.")
