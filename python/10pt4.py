def are_anagrams(word1, word2):
    # Convert both words to lowercase and remove spaces
    cleaned_word1 = word1.lower().replace(" ", "")
    cleaned_word2 = word2.lower().replace(" ", "")

    # Check if the sorted characters of both words are the same
    return sorted(cleaned_word1) == sorted(cleaned_word2)

# Example usage:
word1 = input("Enter the first word: ")
word2 = input("Enter the second word: ")

if are_anagrams(word1, word2):
    print(f"{word1} and {word2} are anagrams.")
else:
    print(f"{word1} and {word2} are not anagrams.")
