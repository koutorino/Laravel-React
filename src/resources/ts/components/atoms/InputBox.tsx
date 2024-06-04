
type Props = {
  className? : string;
}

const InputBox = (props: Props) => {
  return (
    <input type="text" className={`w-full outline outline-1 outline-gray-500 p-1 rounded-lg ${props.className}`}/>
  )
}

export default InputBox
