import { SimpleLineIcons, AntDesign } from '@expo/vector-icons'
import { View, Text } from 'react-native'

export const Icons = () => {
    return(
        <View>
            <View>
                <Text>
                    Testando ícones
                </Text>
            </View>
            <View 
                style={{ 
                    width: 50, 
                    height: 50, 
                    padding: 50,
                    borderRadius: 8, 
                    justifyContent: 'center', 
                    alignItems: 'center',
                    backgroundColor: '#84ffe9'
                }}
            >
                <SimpleLineIcons name='magnifier' size={24}/>
                <AntDesign name='setting' size={24} color={'blue'}/>
            </View>
        </View>
    )
}
