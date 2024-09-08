states_and_capitals = {
    "India": "New Delhi",
    "Pakistan": "Islamabad",
    "China": "Beijing",
    "Nepal": "Kathmandu",
    "Bhutan": "Thimphu",
    "Bangladesh": "Dhaka",
    "Myanmar": "Naypyidaw",
    "Sri Lanka": "Colombo",
    "Maldives": "Male"
}

while True:
    
    state = input("Enter a state: ")
    capital = input("Enter the capital of the state: ")

    if state in states_and_capitals and capital == states_and_capitals[state]:
        print("Correct!")
    else:
        print("Incorrect!")
