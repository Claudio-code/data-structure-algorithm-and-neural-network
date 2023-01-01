
dictionary = {}

dictionary['carlos'] = 21
dictionary['antonia'] = 31
dictionary['antonia'] = 19
dictionary['maria'] = 23

def foreach(items):    
    for key in dictionary.keys():
        print(key)
        print(dictionary[key])


def find_key(find):
    if find in dictionary.keys():
        print('key found')
        return
    print('key not found')


foreach(dictionary)
 
find_key('carlos')

del dictionary['maria']

find_key('maria')
