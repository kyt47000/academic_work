my_list = [5, 3, 1, 2, 4]
print("List created: ", my_list)

my_list.append(6)
print("Item added: ", my_list)

my_list.remove(1)
print("Item removed: ", my_list)

num_elements = len(my_list)
print("Number of elements: ", num_elements)

first_element = my_list[0]
last_element = my_list[-1]
print("First element: ", first_element)
print("Last element: ", last_element)

my_list.sort()
print("List sorted: ", my_list)

my_list.reverse()
print("List reversed: ", my_list)
